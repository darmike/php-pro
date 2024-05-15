<?php
    
    namespace CarMaster\Commands;
    
    use CarMaster\Service;
    use CarMaster\ServiceFactory;
    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Console\Style\SymfonyStyle;
    
    class CreateEditionCommand
    {
        protected function execute (InputInterface $input, OutputInterface $output): int
        {
            $styledOutput = new SymfonyStyle($input,$output);
            $service = new ServiceFactory();
            
            $entityManager = $service->createORMEntityManager();
            $queryBuilder = $entityManager->getRepository(Service::class)->createQueryBuilder('e');//SELECT FROM SERVICE
            $styledOutput->info($queryBuilder->getQuery()->getSQL());
            
            return Command::class;
        }
    }